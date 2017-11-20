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
        $__internal_cfde8bd882edd128d86597fddf55aac59e978ee5fc167c1d65779b9ca0c64f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfde8bd882edd128d86597fddf55aac59e978ee5fc167c1d65779b9ca0c64f71->enter($__internal_cfde8bd882edd128d86597fddf55aac59e978ee5fc167c1d65779b9ca0c64f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_82783205a7ff136a166745281e66acb23f6e53870c4bceaa87fe9ffd6e93f3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82783205a7ff136a166745281e66acb23f6e53870c4bceaa87fe9ffd6e93f3f6->enter($__internal_82783205a7ff136a166745281e66acb23f6e53870c4bceaa87fe9ffd6e93f3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cfde8bd882edd128d86597fddf55aac59e978ee5fc167c1d65779b9ca0c64f71->leave($__internal_cfde8bd882edd128d86597fddf55aac59e978ee5fc167c1d65779b9ca0c64f71_prof);

        
        $__internal_82783205a7ff136a166745281e66acb23f6e53870c4bceaa87fe9ffd6e93f3f6->leave($__internal_82783205a7ff136a166745281e66acb23f6e53870c4bceaa87fe9ffd6e93f3f6_prof);

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
