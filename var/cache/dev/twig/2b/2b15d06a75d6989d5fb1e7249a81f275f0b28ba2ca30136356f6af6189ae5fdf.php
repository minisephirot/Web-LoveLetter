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
        $__internal_f7fe390c088387c7e714ee0ea49e6ea605afc929352fdb3b7abe4552d5d5d9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fe390c088387c7e714ee0ea49e6ea605afc929352fdb3b7abe4552d5d5d9f6->enter($__internal_f7fe390c088387c7e714ee0ea49e6ea605afc929352fdb3b7abe4552d5d5d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ebdbbfe8ecf364098dcb8056b89d2fdb0c912f368d87e31e28a49537327bf8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdbbfe8ecf364098dcb8056b89d2fdb0c912f368d87e31e28a49537327bf8a6->enter($__internal_ebdbbfe8ecf364098dcb8056b89d2fdb0c912f368d87e31e28a49537327bf8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f7fe390c088387c7e714ee0ea49e6ea605afc929352fdb3b7abe4552d5d5d9f6->leave($__internal_f7fe390c088387c7e714ee0ea49e6ea605afc929352fdb3b7abe4552d5d5d9f6_prof);

        
        $__internal_ebdbbfe8ecf364098dcb8056b89d2fdb0c912f368d87e31e28a49537327bf8a6->leave($__internal_ebdbbfe8ecf364098dcb8056b89d2fdb0c912f368d87e31e28a49537327bf8a6_prof);

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
