<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-present http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Bennent\Geauth\Annotation;

use mindplay\annotations\AnnotationException;
use mindplay\annotations\Annotation;

/**
 * Specifies validation of a string, requiring a minimum and/or maximum length.
 *
 * @usage('class'=>true, 'inherited'=>true, 'multiple'=>true)
 */
class AdminMenuRootAnnotation extends Annotation
{
    /**
     * @var int|null Minimum string length (or null, if no minimum)
     */
    public $remark = '';

    /**
     * @var int|null Maximum string length (or null, if no maximum)
     */
    public $icon = '';

    /**
     * @var int|null Minimum string length (or null, if no minimum)
     */
    public $name = '';

    public $action = '';

    public $param = '';

    public $parent = '';

    public $display = false;

    public $order = 10000;

    /**
     * @var string|null class's router url(类的主路由，自定义属性)
     */
    public $url = '';

    /**
     * @var int|null 类型：0(默认只作为菜单);1(有界面可访问菜单);2(无界面可访问菜单)
     */
    public $type = 0;

    /**
     * Initialize the annotation.
     * @param array $properties
     */
    public function initAnnotation(array $properties)
    {
        parent::initAnnotation($properties);
    }
}
