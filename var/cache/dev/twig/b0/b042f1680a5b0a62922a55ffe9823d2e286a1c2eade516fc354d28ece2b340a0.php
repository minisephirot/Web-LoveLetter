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
        $__internal_eb3ed88e574f63f04d0116f2ed6e8fbcb4ee4d43e8b4ca6a314c976efd51ff75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3ed88e574f63f04d0116f2ed6e8fbcb4ee4d43e8b4ca6a314c976efd51ff75->enter($__internal_eb3ed88e574f63f04d0116f2ed6e8fbcb4ee4d43e8b4ca6a314c976efd51ff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dd0d4d6b3d7ed7b88911bf4168815ac4d874b4ff50e40002841ffc42b6281b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0d4d6b3d7ed7b88911bf4168815ac4d874b4ff50e40002841ffc42b6281b17->enter($__internal_dd0d4d6b3d7ed7b88911bf4168815ac4d874b4ff50e40002841ffc42b6281b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_eb3ed88e574f63f04d0116f2ed6e8fbcb4ee4d43e8b4ca6a314c976efd51ff75->leave($__internal_eb3ed88e574f63f04d0116f2ed6e8fbcb4ee4d43e8b4ca6a314c976efd51ff75_prof);

        
        $__internal_dd0d4d6b3d7ed7b88911bf4168815ac4d874b4ff50e40002841ffc42b6281b17->leave($__internal_dd0d4d6b3d7ed7b88911bf4168815ac4d874b4ff50e40002841ffc42b6281b17_prof);

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
