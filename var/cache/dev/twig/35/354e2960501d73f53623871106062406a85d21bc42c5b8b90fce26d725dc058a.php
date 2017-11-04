<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d0f0bbd89a157445d378809eb1a98f1bf7985e504a291af157b2a29c3c5abdfa extends Twig_Template
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
        $__internal_fb7b6bcba7004a011aaa627885e6ea8eab7aa20cd6f67417790bb35330d0f89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7b6bcba7004a011aaa627885e6ea8eab7aa20cd6f67417790bb35330d0f89b->enter($__internal_fb7b6bcba7004a011aaa627885e6ea8eab7aa20cd6f67417790bb35330d0f89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3dc6dbc06d7821982f262ea6252235ea27b7c54659ce5a502a4ea918b83c286a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc6dbc06d7821982f262ea6252235ea27b7c54659ce5a502a4ea918b83c286a->enter($__internal_3dc6dbc06d7821982f262ea6252235ea27b7c54659ce5a502a4ea918b83c286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fb7b6bcba7004a011aaa627885e6ea8eab7aa20cd6f67417790bb35330d0f89b->leave($__internal_fb7b6bcba7004a011aaa627885e6ea8eab7aa20cd6f67417790bb35330d0f89b_prof);

        
        $__internal_3dc6dbc06d7821982f262ea6252235ea27b7c54659ce5a502a4ea918b83c286a->leave($__internal_3dc6dbc06d7821982f262ea6252235ea27b7c54659ce5a502a4ea918b83c286a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
