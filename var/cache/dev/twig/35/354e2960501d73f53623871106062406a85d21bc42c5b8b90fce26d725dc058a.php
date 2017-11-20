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
        $__internal_a6086d428810e421aa95e1da6e9e5e48c7e455c365d7b3bd9178faab0e3374fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6086d428810e421aa95e1da6e9e5e48c7e455c365d7b3bd9178faab0e3374fc->enter($__internal_a6086d428810e421aa95e1da6e9e5e48c7e455c365d7b3bd9178faab0e3374fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b051e47e66dbc6de2b011763d1c6f357b28078afeafb6d4d715b27e52a6f6586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b051e47e66dbc6de2b011763d1c6f357b28078afeafb6d4d715b27e52a6f6586->enter($__internal_b051e47e66dbc6de2b011763d1c6f357b28078afeafb6d4d715b27e52a6f6586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a6086d428810e421aa95e1da6e9e5e48c7e455c365d7b3bd9178faab0e3374fc->leave($__internal_a6086d428810e421aa95e1da6e9e5e48c7e455c365d7b3bd9178faab0e3374fc_prof);

        
        $__internal_b051e47e66dbc6de2b011763d1c6f357b28078afeafb6d4d715b27e52a6f6586->leave($__internal_b051e47e66dbc6de2b011763d1c6f357b28078afeafb6d4d715b27e52a6f6586_prof);

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
