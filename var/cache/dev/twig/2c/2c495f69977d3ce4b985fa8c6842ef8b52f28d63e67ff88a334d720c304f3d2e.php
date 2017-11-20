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
        $__internal_cf413de7758b878fb1a43a4a0e34ceaeb8b31c42efcab9db21a26e4194112036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf413de7758b878fb1a43a4a0e34ceaeb8b31c42efcab9db21a26e4194112036->enter($__internal_cf413de7758b878fb1a43a4a0e34ceaeb8b31c42efcab9db21a26e4194112036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4b96c28d5582e944a27e7b7cf7005b054a7e2ead2234eed997d51776a8960efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b96c28d5582e944a27e7b7cf7005b054a7e2ead2234eed997d51776a8960efb->enter($__internal_4b96c28d5582e944a27e7b7cf7005b054a7e2ead2234eed997d51776a8960efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cf413de7758b878fb1a43a4a0e34ceaeb8b31c42efcab9db21a26e4194112036->leave($__internal_cf413de7758b878fb1a43a4a0e34ceaeb8b31c42efcab9db21a26e4194112036_prof);

        
        $__internal_4b96c28d5582e944a27e7b7cf7005b054a7e2ead2234eed997d51776a8960efb->leave($__internal_4b96c28d5582e944a27e7b7cf7005b054a7e2ead2234eed997d51776a8960efb_prof);

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
