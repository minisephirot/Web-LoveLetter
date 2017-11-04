<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_18e23267d467f8a5f2c2f2f08a0a426cef5f4f3c6afbb8eadd47ac95082739e8 extends Twig_Template
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
        $__internal_6a9fa2786a30fecb7d56464512c0bc15aba39b1b8513d0d4036201458b8898d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9fa2786a30fecb7d56464512c0bc15aba39b1b8513d0d4036201458b8898d3->enter($__internal_6a9fa2786a30fecb7d56464512c0bc15aba39b1b8513d0d4036201458b8898d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7a977c6965cf4e2f85ff39d5d2b78068848a2e952c3fa10eb327f4dd662b5002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a977c6965cf4e2f85ff39d5d2b78068848a2e952c3fa10eb327f4dd662b5002->enter($__internal_7a977c6965cf4e2f85ff39d5d2b78068848a2e952c3fa10eb327f4dd662b5002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6a9fa2786a30fecb7d56464512c0bc15aba39b1b8513d0d4036201458b8898d3->leave($__internal_6a9fa2786a30fecb7d56464512c0bc15aba39b1b8513d0d4036201458b8898d3_prof);

        
        $__internal_7a977c6965cf4e2f85ff39d5d2b78068848a2e952c3fa10eb327f4dd662b5002->leave($__internal_7a977c6965cf4e2f85ff39d5d2b78068848a2e952c3fa10eb327f4dd662b5002_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
