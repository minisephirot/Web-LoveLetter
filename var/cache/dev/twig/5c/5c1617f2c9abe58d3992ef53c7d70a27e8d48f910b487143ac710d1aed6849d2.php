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
        $__internal_88a2ac228c2dc737b404a7d9292c5de52c4c66a3d3eb17adebf03a980c8c7c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a2ac228c2dc737b404a7d9292c5de52c4c66a3d3eb17adebf03a980c8c7c75->enter($__internal_88a2ac228c2dc737b404a7d9292c5de52c4c66a3d3eb17adebf03a980c8c7c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4e53fbae5adb5f9e168584fc45a1dfc8d5a5e0b10b50ac2613ae78ce7621b854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e53fbae5adb5f9e168584fc45a1dfc8d5a5e0b10b50ac2613ae78ce7621b854->enter($__internal_4e53fbae5adb5f9e168584fc45a1dfc8d5a5e0b10b50ac2613ae78ce7621b854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_88a2ac228c2dc737b404a7d9292c5de52c4c66a3d3eb17adebf03a980c8c7c75->leave($__internal_88a2ac228c2dc737b404a7d9292c5de52c4c66a3d3eb17adebf03a980c8c7c75_prof);

        
        $__internal_4e53fbae5adb5f9e168584fc45a1dfc8d5a5e0b10b50ac2613ae78ce7621b854->leave($__internal_4e53fbae5adb5f9e168584fc45a1dfc8d5a5e0b10b50ac2613ae78ce7621b854_prof);

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
