<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e8d6b063d83dd3c4dbd99019b05582d382ebe56c77a824091e8a60bd60b28a70 extends Twig_Template
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
        $__internal_c505d951582861ab74c9473e860292a49d9d162aa955b53f65a69cb13d603521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c505d951582861ab74c9473e860292a49d9d162aa955b53f65a69cb13d603521->enter($__internal_c505d951582861ab74c9473e860292a49d9d162aa955b53f65a69cb13d603521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4f82ce90d43a0c44035fb95f1802846a27aeeaf131bedd89279e69b578365912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f82ce90d43a0c44035fb95f1802846a27aeeaf131bedd89279e69b578365912->enter($__internal_4f82ce90d43a0c44035fb95f1802846a27aeeaf131bedd89279e69b578365912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c505d951582861ab74c9473e860292a49d9d162aa955b53f65a69cb13d603521->leave($__internal_c505d951582861ab74c9473e860292a49d9d162aa955b53f65a69cb13d603521_prof);

        
        $__internal_4f82ce90d43a0c44035fb95f1802846a27aeeaf131bedd89279e69b578365912->leave($__internal_4f82ce90d43a0c44035fb95f1802846a27aeeaf131bedd89279e69b578365912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
