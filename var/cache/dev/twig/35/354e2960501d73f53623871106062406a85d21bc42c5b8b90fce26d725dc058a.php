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
        $__internal_802f4b1ba19ce6b0aa421e542e404ea0fb273d191948dae7152a1711acfa982e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802f4b1ba19ce6b0aa421e542e404ea0fb273d191948dae7152a1711acfa982e->enter($__internal_802f4b1ba19ce6b0aa421e542e404ea0fb273d191948dae7152a1711acfa982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3b533ff6e1cb3cfdc6309cf9e782310f2cacc304081706561f1b960bbbf46be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b533ff6e1cb3cfdc6309cf9e782310f2cacc304081706561f1b960bbbf46be9->enter($__internal_3b533ff6e1cb3cfdc6309cf9e782310f2cacc304081706561f1b960bbbf46be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_802f4b1ba19ce6b0aa421e542e404ea0fb273d191948dae7152a1711acfa982e->leave($__internal_802f4b1ba19ce6b0aa421e542e404ea0fb273d191948dae7152a1711acfa982e_prof);

        
        $__internal_3b533ff6e1cb3cfdc6309cf9e782310f2cacc304081706561f1b960bbbf46be9->leave($__internal_3b533ff6e1cb3cfdc6309cf9e782310f2cacc304081706561f1b960bbbf46be9_prof);

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
