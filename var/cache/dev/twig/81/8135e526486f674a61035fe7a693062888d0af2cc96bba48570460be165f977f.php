<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_274bbab0cabe09ed9745b16de2504dad1451f625557144b46b64363a8c0e5502 extends Twig_Template
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
        $__internal_a648cc8bb318a8e531cb7734959794c710f611239a562b36856ebee14b8e4585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a648cc8bb318a8e531cb7734959794c710f611239a562b36856ebee14b8e4585->enter($__internal_a648cc8bb318a8e531cb7734959794c710f611239a562b36856ebee14b8e4585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ba16f6f671ab8c46fa643e5cad5e3d26c7d2f8e3295701f1ff5a4272b275343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba16f6f671ab8c46fa643e5cad5e3d26c7d2f8e3295701f1ff5a4272b275343e->enter($__internal_ba16f6f671ab8c46fa643e5cad5e3d26c7d2f8e3295701f1ff5a4272b275343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a648cc8bb318a8e531cb7734959794c710f611239a562b36856ebee14b8e4585->leave($__internal_a648cc8bb318a8e531cb7734959794c710f611239a562b36856ebee14b8e4585_prof);

        
        $__internal_ba16f6f671ab8c46fa643e5cad5e3d26c7d2f8e3295701f1ff5a4272b275343e->leave($__internal_ba16f6f671ab8c46fa643e5cad5e3d26c7d2f8e3295701f1ff5a4272b275343e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
