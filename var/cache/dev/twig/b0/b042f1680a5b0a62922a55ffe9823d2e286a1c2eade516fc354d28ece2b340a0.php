<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c81f1c6b24828e5e3f130cc0a255a0d8b86a5c734d74ea9a9f0203248c8108e8 extends Twig_Template
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
        $__internal_014e58cd6c394a51dbf0910562bef3e379d4499263336aa55bee1c8c709e04cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014e58cd6c394a51dbf0910562bef3e379d4499263336aa55bee1c8c709e04cd->enter($__internal_014e58cd6c394a51dbf0910562bef3e379d4499263336aa55bee1c8c709e04cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9172580d655d3be43c493f22040910f5ad09a569a2210143fdae26889f36cc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9172580d655d3be43c493f22040910f5ad09a569a2210143fdae26889f36cc9f->enter($__internal_9172580d655d3be43c493f22040910f5ad09a569a2210143fdae26889f36cc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_014e58cd6c394a51dbf0910562bef3e379d4499263336aa55bee1c8c709e04cd->leave($__internal_014e58cd6c394a51dbf0910562bef3e379d4499263336aa55bee1c8c709e04cd_prof);

        
        $__internal_9172580d655d3be43c493f22040910f5ad09a569a2210143fdae26889f36cc9f->leave($__internal_9172580d655d3be43c493f22040910f5ad09a569a2210143fdae26889f36cc9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
