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
        $__internal_d4a71e5b8b67aec8601601028e3e79d1c76597b087d516a709e4ffde2802fc2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a71e5b8b67aec8601601028e3e79d1c76597b087d516a709e4ffde2802fc2a->enter($__internal_d4a71e5b8b67aec8601601028e3e79d1c76597b087d516a709e4ffde2802fc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7279aff69fea37efad500a2c5539d01b98bae226f729f90d952e34ca03a3589b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7279aff69fea37efad500a2c5539d01b98bae226f729f90d952e34ca03a3589b->enter($__internal_7279aff69fea37efad500a2c5539d01b98bae226f729f90d952e34ca03a3589b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d4a71e5b8b67aec8601601028e3e79d1c76597b087d516a709e4ffde2802fc2a->leave($__internal_d4a71e5b8b67aec8601601028e3e79d1c76597b087d516a709e4ffde2802fc2a_prof);

        
        $__internal_7279aff69fea37efad500a2c5539d01b98bae226f729f90d952e34ca03a3589b->leave($__internal_7279aff69fea37efad500a2c5539d01b98bae226f729f90d952e34ca03a3589b_prof);

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
