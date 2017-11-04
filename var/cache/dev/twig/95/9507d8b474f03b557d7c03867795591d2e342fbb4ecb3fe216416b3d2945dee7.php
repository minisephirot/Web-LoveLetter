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
        $__internal_67bdd9f07cfed90dc914da84217b026272ae74e6df3c332274206c726d59587b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bdd9f07cfed90dc914da84217b026272ae74e6df3c332274206c726d59587b->enter($__internal_67bdd9f07cfed90dc914da84217b026272ae74e6df3c332274206c726d59587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_afc0a50e5c59aa7925aa1eabec9de7cd25a265a4e900197126fee044bcfa8d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc0a50e5c59aa7925aa1eabec9de7cd25a265a4e900197126fee044bcfa8d96->enter($__internal_afc0a50e5c59aa7925aa1eabec9de7cd25a265a4e900197126fee044bcfa8d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_67bdd9f07cfed90dc914da84217b026272ae74e6df3c332274206c726d59587b->leave($__internal_67bdd9f07cfed90dc914da84217b026272ae74e6df3c332274206c726d59587b_prof);

        
        $__internal_afc0a50e5c59aa7925aa1eabec9de7cd25a265a4e900197126fee044bcfa8d96->leave($__internal_afc0a50e5c59aa7925aa1eabec9de7cd25a265a4e900197126fee044bcfa8d96_prof);

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
