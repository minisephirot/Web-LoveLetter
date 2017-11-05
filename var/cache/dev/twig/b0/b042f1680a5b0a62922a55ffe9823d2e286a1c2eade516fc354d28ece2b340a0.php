<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c81f1c6b24828e5e3f130cc0a255a0d8b86a5c734d74ea9a9f0203248c8108e8 extends Twig_Template
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
        $__internal_c9d4798982d4a2decc80bd7c3307a767056f247b702254bdfafe7bb79372a6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d4798982d4a2decc80bd7c3307a767056f247b702254bdfafe7bb79372a6c7->enter($__internal_c9d4798982d4a2decc80bd7c3307a767056f247b702254bdfafe7bb79372a6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c0fb8ad9b8e3d009875afdb814e213450847990540fae2a1b7d13f403b006485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fb8ad9b8e3d009875afdb814e213450847990540fae2a1b7d13f403b006485->enter($__internal_c0fb8ad9b8e3d009875afdb814e213450847990540fae2a1b7d13f403b006485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c9d4798982d4a2decc80bd7c3307a767056f247b702254bdfafe7bb79372a6c7->leave($__internal_c9d4798982d4a2decc80bd7c3307a767056f247b702254bdfafe7bb79372a6c7_prof);

        
        $__internal_c0fb8ad9b8e3d009875afdb814e213450847990540fae2a1b7d13f403b006485->leave($__internal_c0fb8ad9b8e3d009875afdb814e213450847990540fae2a1b7d13f403b006485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
