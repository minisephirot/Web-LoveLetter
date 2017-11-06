<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_84df81e35abd74689c0d93e4721c9d43c5fa66293d905fe6dd0a7328fbe9bfb7 extends Twig_Template
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
        $__internal_43c02a9851310513a0d098d8adfdc249b47e3ceb228c1878f28af22a0d87bf07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c02a9851310513a0d098d8adfdc249b47e3ceb228c1878f28af22a0d87bf07->enter($__internal_43c02a9851310513a0d098d8adfdc249b47e3ceb228c1878f28af22a0d87bf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_32c836245c837b3fc5a35e5b3806677f4853e1657598e88e91333f2f78714ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c836245c837b3fc5a35e5b3806677f4853e1657598e88e91333f2f78714ed2->enter($__internal_32c836245c837b3fc5a35e5b3806677f4853e1657598e88e91333f2f78714ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_43c02a9851310513a0d098d8adfdc249b47e3ceb228c1878f28af22a0d87bf07->leave($__internal_43c02a9851310513a0d098d8adfdc249b47e3ceb228c1878f28af22a0d87bf07_prof);

        
        $__internal_32c836245c837b3fc5a35e5b3806677f4853e1657598e88e91333f2f78714ed2->leave($__internal_32c836245c837b3fc5a35e5b3806677f4853e1657598e88e91333f2f78714ed2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
