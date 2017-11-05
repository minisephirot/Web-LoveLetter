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
        $__internal_74f4ca1a7b62fe20e0f4d1ecadc95f739e82ed5f7162bd6a2c2b8e5ac704c02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f4ca1a7b62fe20e0f4d1ecadc95f739e82ed5f7162bd6a2c2b8e5ac704c02d->enter($__internal_74f4ca1a7b62fe20e0f4d1ecadc95f739e82ed5f7162bd6a2c2b8e5ac704c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0645ebcdf2888939e7eefa1fe59174ae94fce7d6c3ed066538d23c02ae8ca543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0645ebcdf2888939e7eefa1fe59174ae94fce7d6c3ed066538d23c02ae8ca543->enter($__internal_0645ebcdf2888939e7eefa1fe59174ae94fce7d6c3ed066538d23c02ae8ca543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_74f4ca1a7b62fe20e0f4d1ecadc95f739e82ed5f7162bd6a2c2b8e5ac704c02d->leave($__internal_74f4ca1a7b62fe20e0f4d1ecadc95f739e82ed5f7162bd6a2c2b8e5ac704c02d_prof);

        
        $__internal_0645ebcdf2888939e7eefa1fe59174ae94fce7d6c3ed066538d23c02ae8ca543->leave($__internal_0645ebcdf2888939e7eefa1fe59174ae94fce7d6c3ed066538d23c02ae8ca543_prof);

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
