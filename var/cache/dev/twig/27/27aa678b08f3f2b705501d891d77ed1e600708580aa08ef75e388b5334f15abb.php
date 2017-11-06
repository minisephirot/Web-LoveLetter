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
        $__internal_15e4091ee5739f48afc89e6f90566e5f67ca3f40a7d67ae4be83da4bdc4e9f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e4091ee5739f48afc89e6f90566e5f67ca3f40a7d67ae4be83da4bdc4e9f32->enter($__internal_15e4091ee5739f48afc89e6f90566e5f67ca3f40a7d67ae4be83da4bdc4e9f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4d44e7beeaa366dcc1b870bb72a97fb9ab0033e914b3782beca37d1e09a98212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d44e7beeaa366dcc1b870bb72a97fb9ab0033e914b3782beca37d1e09a98212->enter($__internal_4d44e7beeaa366dcc1b870bb72a97fb9ab0033e914b3782beca37d1e09a98212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_15e4091ee5739f48afc89e6f90566e5f67ca3f40a7d67ae4be83da4bdc4e9f32->leave($__internal_15e4091ee5739f48afc89e6f90566e5f67ca3f40a7d67ae4be83da4bdc4e9f32_prof);

        
        $__internal_4d44e7beeaa366dcc1b870bb72a97fb9ab0033e914b3782beca37d1e09a98212->leave($__internal_4d44e7beeaa366dcc1b870bb72a97fb9ab0033e914b3782beca37d1e09a98212_prof);

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
