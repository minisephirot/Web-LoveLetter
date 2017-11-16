<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
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
        $__internal_13682adff671eb93b9e9da3f280a9a43e57d57ea8e5757597011c687f749455e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13682adff671eb93b9e9da3f280a9a43e57d57ea8e5757597011c687f749455e->enter($__internal_13682adff671eb93b9e9da3f280a9a43e57d57ea8e5757597011c687f749455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fe34f234186f874310e76a9d3a78f0711f0c381d86cc6e2de7701166bac14bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe34f234186f874310e76a9d3a78f0711f0c381d86cc6e2de7701166bac14bc2->enter($__internal_fe34f234186f874310e76a9d3a78f0711f0c381d86cc6e2de7701166bac14bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_13682adff671eb93b9e9da3f280a9a43e57d57ea8e5757597011c687f749455e->leave($__internal_13682adff671eb93b9e9da3f280a9a43e57d57ea8e5757597011c687f749455e_prof);

        
        $__internal_fe34f234186f874310e76a9d3a78f0711f0c381d86cc6e2de7701166bac14bc2->leave($__internal_fe34f234186f874310e76a9d3a78f0711f0c381d86cc6e2de7701166bac14bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
