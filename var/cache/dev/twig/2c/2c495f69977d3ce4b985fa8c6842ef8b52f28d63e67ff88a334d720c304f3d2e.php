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
        $__internal_36d1255fb5361805838deb74fc9b1ab1790ec548cf24eb098a5a285f31faae9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d1255fb5361805838deb74fc9b1ab1790ec548cf24eb098a5a285f31faae9d->enter($__internal_36d1255fb5361805838deb74fc9b1ab1790ec548cf24eb098a5a285f31faae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7148bff928760bc8fc1c1130a3e0d50d9f7cae37617fdede1baa1ebf4877dfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7148bff928760bc8fc1c1130a3e0d50d9f7cae37617fdede1baa1ebf4877dfbb->enter($__internal_7148bff928760bc8fc1c1130a3e0d50d9f7cae37617fdede1baa1ebf4877dfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_36d1255fb5361805838deb74fc9b1ab1790ec548cf24eb098a5a285f31faae9d->leave($__internal_36d1255fb5361805838deb74fc9b1ab1790ec548cf24eb098a5a285f31faae9d_prof);

        
        $__internal_7148bff928760bc8fc1c1130a3e0d50d9f7cae37617fdede1baa1ebf4877dfbb->leave($__internal_7148bff928760bc8fc1c1130a3e0d50d9f7cae37617fdede1baa1ebf4877dfbb_prof);

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
