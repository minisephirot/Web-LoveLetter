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
        $__internal_5a9f479c325c1f9cc231efc198681332ca3c766cf320506988e5074e3e878b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9f479c325c1f9cc231efc198681332ca3c766cf320506988e5074e3e878b74->enter($__internal_5a9f479c325c1f9cc231efc198681332ca3c766cf320506988e5074e3e878b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f260a70f50dadbfcd54481a444a491ab7eeb0093be08b6894c173decf2abc091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f260a70f50dadbfcd54481a444a491ab7eeb0093be08b6894c173decf2abc091->enter($__internal_f260a70f50dadbfcd54481a444a491ab7eeb0093be08b6894c173decf2abc091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5a9f479c325c1f9cc231efc198681332ca3c766cf320506988e5074e3e878b74->leave($__internal_5a9f479c325c1f9cc231efc198681332ca3c766cf320506988e5074e3e878b74_prof);

        
        $__internal_f260a70f50dadbfcd54481a444a491ab7eeb0093be08b6894c173decf2abc091->leave($__internal_f260a70f50dadbfcd54481a444a491ab7eeb0093be08b6894c173decf2abc091_prof);

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
