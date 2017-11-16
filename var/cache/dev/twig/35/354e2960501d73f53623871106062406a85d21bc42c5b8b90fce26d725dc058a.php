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
        $__internal_5c2764ebff110041c54a31f58607224e4c9e64ede21c03ea7f1a02d6a9ca2bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2764ebff110041c54a31f58607224e4c9e64ede21c03ea7f1a02d6a9ca2bbd->enter($__internal_5c2764ebff110041c54a31f58607224e4c9e64ede21c03ea7f1a02d6a9ca2bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c961fb76a9c3fbd188d3b35639636e1f5e65f6b42f453d937fb2a035188b92ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c961fb76a9c3fbd188d3b35639636e1f5e65f6b42f453d937fb2a035188b92ea->enter($__internal_c961fb76a9c3fbd188d3b35639636e1f5e65f6b42f453d937fb2a035188b92ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5c2764ebff110041c54a31f58607224e4c9e64ede21c03ea7f1a02d6a9ca2bbd->leave($__internal_5c2764ebff110041c54a31f58607224e4c9e64ede21c03ea7f1a02d6a9ca2bbd_prof);

        
        $__internal_c961fb76a9c3fbd188d3b35639636e1f5e65f6b42f453d937fb2a035188b92ea->leave($__internal_c961fb76a9c3fbd188d3b35639636e1f5e65f6b42f453d937fb2a035188b92ea_prof);

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
