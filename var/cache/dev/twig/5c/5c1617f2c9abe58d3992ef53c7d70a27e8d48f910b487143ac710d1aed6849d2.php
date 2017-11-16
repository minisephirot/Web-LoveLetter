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
        $__internal_38e7278e4cac7662cb5d8dfac670c013370aff5584528f57dfbd5e598d40d6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e7278e4cac7662cb5d8dfac670c013370aff5584528f57dfbd5e598d40d6be->enter($__internal_38e7278e4cac7662cb5d8dfac670c013370aff5584528f57dfbd5e598d40d6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_46ac5cc9deaf7fe4d3cb097adbd8abb83f6a870dd14c2998d85d8049f186cbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ac5cc9deaf7fe4d3cb097adbd8abb83f6a870dd14c2998d85d8049f186cbe1->enter($__internal_46ac5cc9deaf7fe4d3cb097adbd8abb83f6a870dd14c2998d85d8049f186cbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_38e7278e4cac7662cb5d8dfac670c013370aff5584528f57dfbd5e598d40d6be->leave($__internal_38e7278e4cac7662cb5d8dfac670c013370aff5584528f57dfbd5e598d40d6be_prof);

        
        $__internal_46ac5cc9deaf7fe4d3cb097adbd8abb83f6a870dd14c2998d85d8049f186cbe1->leave($__internal_46ac5cc9deaf7fe4d3cb097adbd8abb83f6a870dd14c2998d85d8049f186cbe1_prof);

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
