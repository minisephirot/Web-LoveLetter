<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_316d22b0e3178201a79bf30df7f164418cb94ee3324c1ed9bf8e64b8c125b6dc extends Twig_Template
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
        $__internal_fda78791e26ce6c1d41a85ccd1a019f2d825b6cf7062fec970b9e7ee8a1796a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda78791e26ce6c1d41a85ccd1a019f2d825b6cf7062fec970b9e7ee8a1796a1->enter($__internal_fda78791e26ce6c1d41a85ccd1a019f2d825b6cf7062fec970b9e7ee8a1796a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_406609cf2334689890f1682c4968335c88b5fd1fb9f8a0263cad43cd5cd31d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406609cf2334689890f1682c4968335c88b5fd1fb9f8a0263cad43cd5cd31d54->enter($__internal_406609cf2334689890f1682c4968335c88b5fd1fb9f8a0263cad43cd5cd31d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fda78791e26ce6c1d41a85ccd1a019f2d825b6cf7062fec970b9e7ee8a1796a1->leave($__internal_fda78791e26ce6c1d41a85ccd1a019f2d825b6cf7062fec970b9e7ee8a1796a1_prof);

        
        $__internal_406609cf2334689890f1682c4968335c88b5fd1fb9f8a0263cad43cd5cd31d54->leave($__internal_406609cf2334689890f1682c4968335c88b5fd1fb9f8a0263cad43cd5cd31d54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
