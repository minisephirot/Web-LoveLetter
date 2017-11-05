<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a422a63ffedfec728250a49eb2b5a3a15a4ce2a0ac6987a810def400d8ee003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a422a63ffedfec728250a49eb2b5a3a15a4ce2a0ac6987a810def400d8ee003->enter($__internal_5a422a63ffedfec728250a49eb2b5a3a15a4ce2a0ac6987a810def400d8ee003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_da59006667acc5cb7262803fc7e71128a2e7f0380161a052efdd09d80426a390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da59006667acc5cb7262803fc7e71128a2e7f0380161a052efdd09d80426a390->enter($__internal_da59006667acc5cb7262803fc7e71128a2e7f0380161a052efdd09d80426a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5a422a63ffedfec728250a49eb2b5a3a15a4ce2a0ac6987a810def400d8ee003->leave($__internal_5a422a63ffedfec728250a49eb2b5a3a15a4ce2a0ac6987a810def400d8ee003_prof);

        
        $__internal_da59006667acc5cb7262803fc7e71128a2e7f0380161a052efdd09d80426a390->leave($__internal_da59006667acc5cb7262803fc7e71128a2e7f0380161a052efdd09d80426a390_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
