<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_67df203297ae53eedef7dd578a07ed5b038c60b38209ccb58babe7efb1d78604 extends Twig_Template
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
        $__internal_867abd8f00b323731370da0b8ddf39f9d6cea860c73bcc81351b7cb9c7339fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867abd8f00b323731370da0b8ddf39f9d6cea860c73bcc81351b7cb9c7339fd5->enter($__internal_867abd8f00b323731370da0b8ddf39f9d6cea860c73bcc81351b7cb9c7339fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_562bf0f7834d403bd3c5b03db882e3939f669aa44e1ed568bde74ec9234fd534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562bf0f7834d403bd3c5b03db882e3939f669aa44e1ed568bde74ec9234fd534->enter($__internal_562bf0f7834d403bd3c5b03db882e3939f669aa44e1ed568bde74ec9234fd534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_867abd8f00b323731370da0b8ddf39f9d6cea860c73bcc81351b7cb9c7339fd5->leave($__internal_867abd8f00b323731370da0b8ddf39f9d6cea860c73bcc81351b7cb9c7339fd5_prof);

        
        $__internal_562bf0f7834d403bd3c5b03db882e3939f669aa44e1ed568bde74ec9234fd534->leave($__internal_562bf0f7834d403bd3c5b03db882e3939f669aa44e1ed568bde74ec9234fd534_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
