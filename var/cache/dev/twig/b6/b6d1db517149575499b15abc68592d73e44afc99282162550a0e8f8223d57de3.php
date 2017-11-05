<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_e6b03847f3fb96678844ca5eaa3ddd374c62874ffbc13dba6d7400328901a295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b03847f3fb96678844ca5eaa3ddd374c62874ffbc13dba6d7400328901a295->enter($__internal_e6b03847f3fb96678844ca5eaa3ddd374c62874ffbc13dba6d7400328901a295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_24632eb96249d5425c096db2c94a0a1b0a2e21af14084c35c30df8ac3d20a193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24632eb96249d5425c096db2c94a0a1b0a2e21af14084c35c30df8ac3d20a193->enter($__internal_24632eb96249d5425c096db2c94a0a1b0a2e21af14084c35c30df8ac3d20a193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e6b03847f3fb96678844ca5eaa3ddd374c62874ffbc13dba6d7400328901a295->leave($__internal_e6b03847f3fb96678844ca5eaa3ddd374c62874ffbc13dba6d7400328901a295_prof);

        
        $__internal_24632eb96249d5425c096db2c94a0a1b0a2e21af14084c35c30df8ac3d20a193->leave($__internal_24632eb96249d5425c096db2c94a0a1b0a2e21af14084c35c30df8ac3d20a193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
