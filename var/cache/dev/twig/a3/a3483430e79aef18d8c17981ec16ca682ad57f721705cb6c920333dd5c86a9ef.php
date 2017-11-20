<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_df10293a67539771cbd9304a2724fba96049220ec48948a89148f745f1155954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df10293a67539771cbd9304a2724fba96049220ec48948a89148f745f1155954->enter($__internal_df10293a67539771cbd9304a2724fba96049220ec48948a89148f745f1155954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_73762cdb598f987366ecbdaeedac535a9319c786a56b1d958890071ebd299928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73762cdb598f987366ecbdaeedac535a9319c786a56b1d958890071ebd299928->enter($__internal_73762cdb598f987366ecbdaeedac535a9319c786a56b1d958890071ebd299928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_df10293a67539771cbd9304a2724fba96049220ec48948a89148f745f1155954->leave($__internal_df10293a67539771cbd9304a2724fba96049220ec48948a89148f745f1155954_prof);

        
        $__internal_73762cdb598f987366ecbdaeedac535a9319c786a56b1d958890071ebd299928->leave($__internal_73762cdb598f987366ecbdaeedac535a9319c786a56b1d958890071ebd299928_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
