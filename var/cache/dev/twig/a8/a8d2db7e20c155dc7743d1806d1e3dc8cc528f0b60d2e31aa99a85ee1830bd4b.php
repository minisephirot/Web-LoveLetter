<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6cfdd71e94444c899edef362485c9beedc392f4f3ee66b627195df79810d6cfc extends Twig_Template
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
        $__internal_1f38f597c50c8c8f0d3dd4883a1af9828f79c924c86109ea6706f69947f353a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f38f597c50c8c8f0d3dd4883a1af9828f79c924c86109ea6706f69947f353a4->enter($__internal_1f38f597c50c8c8f0d3dd4883a1af9828f79c924c86109ea6706f69947f353a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5eb79816f47cbec6ba78088db14de1f57ab27e71030b31d0ff865fd71f0cdb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb79816f47cbec6ba78088db14de1f57ab27e71030b31d0ff865fd71f0cdb6a->enter($__internal_5eb79816f47cbec6ba78088db14de1f57ab27e71030b31d0ff865fd71f0cdb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1f38f597c50c8c8f0d3dd4883a1af9828f79c924c86109ea6706f69947f353a4->leave($__internal_1f38f597c50c8c8f0d3dd4883a1af9828f79c924c86109ea6706f69947f353a4_prof);

        
        $__internal_5eb79816f47cbec6ba78088db14de1f57ab27e71030b31d0ff865fd71f0cdb6a->leave($__internal_5eb79816f47cbec6ba78088db14de1f57ab27e71030b31d0ff865fd71f0cdb6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
