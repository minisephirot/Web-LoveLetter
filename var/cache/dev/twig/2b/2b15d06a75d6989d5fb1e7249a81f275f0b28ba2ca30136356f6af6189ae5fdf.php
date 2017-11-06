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
        $__internal_fe8abd53fa089878644953961ab9407738dc15f607fad42a54db56f7300cefed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8abd53fa089878644953961ab9407738dc15f607fad42a54db56f7300cefed->enter($__internal_fe8abd53fa089878644953961ab9407738dc15f607fad42a54db56f7300cefed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_54a0a9eb023e206fa9a1e661045e6c635780289ab4387660edf137d03a202351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a0a9eb023e206fa9a1e661045e6c635780289ab4387660edf137d03a202351->enter($__internal_54a0a9eb023e206fa9a1e661045e6c635780289ab4387660edf137d03a202351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fe8abd53fa089878644953961ab9407738dc15f607fad42a54db56f7300cefed->leave($__internal_fe8abd53fa089878644953961ab9407738dc15f607fad42a54db56f7300cefed_prof);

        
        $__internal_54a0a9eb023e206fa9a1e661045e6c635780289ab4387660edf137d03a202351->leave($__internal_54a0a9eb023e206fa9a1e661045e6c635780289ab4387660edf137d03a202351_prof);

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
