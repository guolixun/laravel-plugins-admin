<?php
namespace Bennent\Geauth\Traits;

use Bennent\Geauth\Models\Permission;
use mindplay\annotations\AnnotationException;
use mindplay\annotations\Annotations;

trait AnnotationTrait {

    public $filterClass = [];

    public static function importMenus($app)
    {
        Annotations::$config['cache']                 = false;
        $annotationManager                            = Annotations::getManager();
        $annotationManager->registry['adminMenu']     = 'Bennent\Geauth\Annotation\AdminMenuAnnotation';
        $annotationManager->registry['adminMenuRoot'] = 'Bennent\Geauth\Annotation\AdminMenuRootAnnotation';

        $newMenus   = [];
        $filePatten = $app.DIRECTORY_SEPARATOR."*Controller.php";

        $controllers = ge_scan_dir($filePatten);
        if (!empty($controllers)) {
            foreach ($controllers as $controller) {
                $controller      = preg_replace('/\.php$/', '', $controller);
                $controllerName  = preg_replace("/Controller$/", '', $controller);
                $controllerClass = 'App'.DIRECTORY_SEPARATOR.'Http'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR."$controller";
                //排除公共类
                if (!in_array($controller, (new self())->filterClass)) {
                    try {
                        $menuAnnotations = Annotations::ofClass($controllerClass, '@adminMenuRoot');
                        //类注释更新
                        if (!empty($menuAnnotations)) {
                            foreach ($menuAnnotations as $menuAnnotation) {
                                $action = $menuAnnotation->action;
                                //处理父级关系
                                if ($menuAnnotation->parent && $menuAnnotation->parent == '#') {
                                    $pid = 0;
                                } else {
                                    $parentID = Permission::where('url', $menuAnnotation->parent)->value('id');
                                    $pid      = empty($parentId) ? $parentID : 0;
                                }
                                //类菜单节点数据处理
                                $findAdminMenu = Permission::updateOrCreate([
                                    'pid' => $pid,
                                    'url' => strtolower(trim($menuAnnotation->url))
                                ], [
                                    'pid'    => $pid,
                                    'name'   => trim($menuAnnotation->name),
                                    'type'   => $menuAnnotation->type,
                                    'icon'   => $menuAnnotation->icon,
                                    'status' => empty($menuAnnotation->display) ? 0 : 1,
                                    'url'    => strtolower(trim($menuAnnotation->url)),
                                    'order'  => floatval($menuAnnotation->order),
                                ]);
                                array_push($newMenus, "$app/$controllerName/$action 层级关系已更新");
                            }
                        }
                    } catch (AnnotationException $e) {
                        continue;
                    }

                    //方法注释更新
                    $reflect = new \ReflectionClass($controllerClass);
                    $methods = $reflect->getMethods(\ReflectionMethod::IS_PUBLIC);

                    if (!empty($methods)) {
                        foreach ($methods as $method) {
                            if ($method->class == $controllerClass && strpos($method->name, '_') !== 0) {
                                try {
                                    $menuAnnotations = Annotations::ofMethod($controllerClass, $method->name, '@adminMenu');
                                    if (!empty($menuAnnotations)) {
                                        $menuAnnotation = $menuAnnotations[0];
                                        // 获取方法的父类信息
                                        if (empty($menuAnnotation->parent)) {
                                            $parentId = 0;
                                        } else {
                                            /*$parent      = explode('/', $menuAnnotation->parent);
                                            $countParent = count($parent);
                                            if ($countParent > 3) {
                                                throw new \Exception($controllerClass.':'.$action.'  @menuRoot parent格式不正确!');
                                            }*/
                                            $findParentAdminMenu = Permission::where('url', strtolower(trim($menuAnnotation->parent)))->first();
                                            $parentId            = empty($findParentAdminMenu) ? 0 : $findParentAdminMenu->id;
                                        }

                                        $action = $method->name;
                                        //方法数据更新
                                        $findAdminMenu = Permission::updateOrCreate([
                                            'pid' => $parentId,
                                            'url' => strtolower(trim($menuAnnotation->router))
                                        ], [
                                            'pid'    => $parentId,
                                            'name'   => trim($menuAnnotation->name),
                                            'url'    => strtolower(trim($menuAnnotation->router)),
                                            'type'   => $menuAnnotation->hasView ? 1 : 2,
                                            'icon'   => $menuAnnotation->icon,
                                            'status' => empty($menuAnnotation->display) ? 0 : 1,
                                            'order'  => floatval($menuAnnotation->order)
                                        ]);
                                        array_push($newMenus, "$app/$controllerName/$action 已导入");
                                    }
                                } catch (AnnotationException $e) {
                                    continue;
                                }
                            }
                        }
                    }
                } else {
                    continue;
                }
            }
        }

        return $newMenus;
    }
}
