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
        $__internal_a61bff58e829ca22018009a7dce9ca606ed56f5c4b270e53c26de7330fb354b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61bff58e829ca22018009a7dce9ca606ed56f5c4b270e53c26de7330fb354b5->enter($__internal_a61bff58e829ca22018009a7dce9ca606ed56f5c4b270e53c26de7330fb354b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_20c5e5e7833eee4998004f8717d06aea1b4e2d5f8056638ffb36185d8becf066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c5e5e7833eee4998004f8717d06aea1b4e2d5f8056638ffb36185d8becf066->enter($__internal_20c5e5e7833eee4998004f8717d06aea1b4e2d5f8056638ffb36185d8becf066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a61bff58e829ca22018009a7dce9ca606ed56f5c4b270e53c26de7330fb354b5->leave($__internal_a61bff58e829ca22018009a7dce9ca606ed56f5c4b270e53c26de7330fb354b5_prof);

        
        $__internal_20c5e5e7833eee4998004f8717d06aea1b4e2d5f8056638ffb36185d8becf066->leave($__internal_20c5e5e7833eee4998004f8717d06aea1b4e2d5f8056638ffb36185d8becf066_prof);

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
