<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7a65e2a9bbf4ce00847a826ee8c05a21954b62b953fcab9da798367070afea48 extends Twig_Template
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
        $__internal_898457f78af19fb7ecd247578d334553a168230e4f07de2e32646a774b224076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898457f78af19fb7ecd247578d334553a168230e4f07de2e32646a774b224076->enter($__internal_898457f78af19fb7ecd247578d334553a168230e4f07de2e32646a774b224076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e633f79f74807b81c0528ee52e32e8e90e9b6b5d1cecf06d938a50994d7b9398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e633f79f74807b81c0528ee52e32e8e90e9b6b5d1cecf06d938a50994d7b9398->enter($__internal_e633f79f74807b81c0528ee52e32e8e90e9b6b5d1cecf06d938a50994d7b9398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_898457f78af19fb7ecd247578d334553a168230e4f07de2e32646a774b224076->leave($__internal_898457f78af19fb7ecd247578d334553a168230e4f07de2e32646a774b224076_prof);

        
        $__internal_e633f79f74807b81c0528ee52e32e8e90e9b6b5d1cecf06d938a50994d7b9398->leave($__internal_e633f79f74807b81c0528ee52e32e8e90e9b6b5d1cecf06d938a50994d7b9398_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
