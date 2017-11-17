<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_6a575b395e5a9ea4fd3b0b4397a716f844c2793c6a31a2f652c8ea73a62d3d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a575b395e5a9ea4fd3b0b4397a716f844c2793c6a31a2f652c8ea73a62d3d51->enter($__internal_6a575b395e5a9ea4fd3b0b4397a716f844c2793c6a31a2f652c8ea73a62d3d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_33438215d7a522c9c1f8ca1fff6454b6a2d4fe8a3a26d0d6a2a83dec57d77d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33438215d7a522c9c1f8ca1fff6454b6a2d4fe8a3a26d0d6a2a83dec57d77d27->enter($__internal_33438215d7a522c9c1f8ca1fff6454b6a2d4fe8a3a26d0d6a2a83dec57d77d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6a575b395e5a9ea4fd3b0b4397a716f844c2793c6a31a2f652c8ea73a62d3d51->leave($__internal_6a575b395e5a9ea4fd3b0b4397a716f844c2793c6a31a2f652c8ea73a62d3d51_prof);

        
        $__internal_33438215d7a522c9c1f8ca1fff6454b6a2d4fe8a3a26d0d6a2a83dec57d77d27->leave($__internal_33438215d7a522c9c1f8ca1fff6454b6a2d4fe8a3a26d0d6a2a83dec57d77d27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
