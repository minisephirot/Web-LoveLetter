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
        $__internal_9b5792721cf3a00a20bbef92c7faf0a341ccc007f5a763616fcf12f6c549cc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5792721cf3a00a20bbef92c7faf0a341ccc007f5a763616fcf12f6c549cc43->enter($__internal_9b5792721cf3a00a20bbef92c7faf0a341ccc007f5a763616fcf12f6c549cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_601aab9abb6c4e936cfb15aed8dfe63c8b0dedd9f1486bab59da58652658c477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601aab9abb6c4e936cfb15aed8dfe63c8b0dedd9f1486bab59da58652658c477->enter($__internal_601aab9abb6c4e936cfb15aed8dfe63c8b0dedd9f1486bab59da58652658c477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9b5792721cf3a00a20bbef92c7faf0a341ccc007f5a763616fcf12f6c549cc43->leave($__internal_9b5792721cf3a00a20bbef92c7faf0a341ccc007f5a763616fcf12f6c549cc43_prof);

        
        $__internal_601aab9abb6c4e936cfb15aed8dfe63c8b0dedd9f1486bab59da58652658c477->leave($__internal_601aab9abb6c4e936cfb15aed8dfe63c8b0dedd9f1486bab59da58652658c477_prof);

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
