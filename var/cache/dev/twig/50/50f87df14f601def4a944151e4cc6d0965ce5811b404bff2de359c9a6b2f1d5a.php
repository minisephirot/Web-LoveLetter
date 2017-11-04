<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_49659a44992dc1813fc9f7de6dbc22911e8f0c8a4a1d5fda0b4b82b9877a5285 extends Twig_Template
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
        $__internal_8e60a751da77dd4b57cc2e25d68e629e750d138fc3513d048939e013bc377b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e60a751da77dd4b57cc2e25d68e629e750d138fc3513d048939e013bc377b2c->enter($__internal_8e60a751da77dd4b57cc2e25d68e629e750d138fc3513d048939e013bc377b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8d1ea0ff338e43410ce7d929adacc71c74461a8bb9b0a40ec3e0b4526712c682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1ea0ff338e43410ce7d929adacc71c74461a8bb9b0a40ec3e0b4526712c682->enter($__internal_8d1ea0ff338e43410ce7d929adacc71c74461a8bb9b0a40ec3e0b4526712c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8e60a751da77dd4b57cc2e25d68e629e750d138fc3513d048939e013bc377b2c->leave($__internal_8e60a751da77dd4b57cc2e25d68e629e750d138fc3513d048939e013bc377b2c_prof);

        
        $__internal_8d1ea0ff338e43410ce7d929adacc71c74461a8bb9b0a40ec3e0b4526712c682->leave($__internal_8d1ea0ff338e43410ce7d929adacc71c74461a8bb9b0a40ec3e0b4526712c682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
