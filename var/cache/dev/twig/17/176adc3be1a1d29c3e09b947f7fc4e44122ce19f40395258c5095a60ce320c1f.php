<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0d76113f15b8033c60734e18cd14fb2140f39b49b849fdcf27843165b54b909a extends Twig_Template
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
        $__internal_7a8604879515b505ec26cf823852ce8c5e7d522596862fc7d522acd79031287d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8604879515b505ec26cf823852ce8c5e7d522596862fc7d522acd79031287d->enter($__internal_7a8604879515b505ec26cf823852ce8c5e7d522596862fc7d522acd79031287d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_028a37e936d74e604f8261990d5a2c1ae89db28cf77fcafe5a0ed30a921ff25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028a37e936d74e604f8261990d5a2c1ae89db28cf77fcafe5a0ed30a921ff25e->enter($__internal_028a37e936d74e604f8261990d5a2c1ae89db28cf77fcafe5a0ed30a921ff25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7a8604879515b505ec26cf823852ce8c5e7d522596862fc7d522acd79031287d->leave($__internal_7a8604879515b505ec26cf823852ce8c5e7d522596862fc7d522acd79031287d_prof);

        
        $__internal_028a37e936d74e604f8261990d5a2c1ae89db28cf77fcafe5a0ed30a921ff25e->leave($__internal_028a37e936d74e604f8261990d5a2c1ae89db28cf77fcafe5a0ed30a921ff25e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
