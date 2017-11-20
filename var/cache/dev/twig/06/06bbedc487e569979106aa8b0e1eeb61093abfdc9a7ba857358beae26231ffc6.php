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
        $__internal_3065fa12a1946f7a38e6ec34128d38687532cee8a16c437e64fa8a81a15ba020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3065fa12a1946f7a38e6ec34128d38687532cee8a16c437e64fa8a81a15ba020->enter($__internal_3065fa12a1946f7a38e6ec34128d38687532cee8a16c437e64fa8a81a15ba020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_707e7de7d636352d954a97b98efafa83dae8c3e0a08a848fd5c4a2e8f6b22853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707e7de7d636352d954a97b98efafa83dae8c3e0a08a848fd5c4a2e8f6b22853->enter($__internal_707e7de7d636352d954a97b98efafa83dae8c3e0a08a848fd5c4a2e8f6b22853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3065fa12a1946f7a38e6ec34128d38687532cee8a16c437e64fa8a81a15ba020->leave($__internal_3065fa12a1946f7a38e6ec34128d38687532cee8a16c437e64fa8a81a15ba020_prof);

        
        $__internal_707e7de7d636352d954a97b98efafa83dae8c3e0a08a848fd5c4a2e8f6b22853->leave($__internal_707e7de7d636352d954a97b98efafa83dae8c3e0a08a848fd5c4a2e8f6b22853_prof);

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
