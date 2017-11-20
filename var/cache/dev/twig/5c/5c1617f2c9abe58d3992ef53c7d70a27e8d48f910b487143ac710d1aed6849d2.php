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
        $__internal_8540ee8a772830c89a3672a0e5022a95d9860b5e20edc523a78e4ce171ea5e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8540ee8a772830c89a3672a0e5022a95d9860b5e20edc523a78e4ce171ea5e9a->enter($__internal_8540ee8a772830c89a3672a0e5022a95d9860b5e20edc523a78e4ce171ea5e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_86605763e9d9705faa6386479b3a81b743a7f419a2a90a02fa45fe4aea67233e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86605763e9d9705faa6386479b3a81b743a7f419a2a90a02fa45fe4aea67233e->enter($__internal_86605763e9d9705faa6386479b3a81b743a7f419a2a90a02fa45fe4aea67233e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8540ee8a772830c89a3672a0e5022a95d9860b5e20edc523a78e4ce171ea5e9a->leave($__internal_8540ee8a772830c89a3672a0e5022a95d9860b5e20edc523a78e4ce171ea5e9a_prof);

        
        $__internal_86605763e9d9705faa6386479b3a81b743a7f419a2a90a02fa45fe4aea67233e->leave($__internal_86605763e9d9705faa6386479b3a81b743a7f419a2a90a02fa45fe4aea67233e_prof);

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
