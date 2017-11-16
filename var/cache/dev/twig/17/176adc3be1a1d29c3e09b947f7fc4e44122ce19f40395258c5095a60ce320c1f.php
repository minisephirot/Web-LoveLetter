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
        $__internal_97afb24f3190c1ee77a9a3437d48bb1f88e441b6a3d16452fa92b5b2716542f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97afb24f3190c1ee77a9a3437d48bb1f88e441b6a3d16452fa92b5b2716542f6->enter($__internal_97afb24f3190c1ee77a9a3437d48bb1f88e441b6a3d16452fa92b5b2716542f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_12bc290953f8cef182dcbf17f9a2d352382997e2be2f5c45a9d185c9da2c7831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bc290953f8cef182dcbf17f9a2d352382997e2be2f5c45a9d185c9da2c7831->enter($__internal_12bc290953f8cef182dcbf17f9a2d352382997e2be2f5c45a9d185c9da2c7831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_97afb24f3190c1ee77a9a3437d48bb1f88e441b6a3d16452fa92b5b2716542f6->leave($__internal_97afb24f3190c1ee77a9a3437d48bb1f88e441b6a3d16452fa92b5b2716542f6_prof);

        
        $__internal_12bc290953f8cef182dcbf17f9a2d352382997e2be2f5c45a9d185c9da2c7831->leave($__internal_12bc290953f8cef182dcbf17f9a2d352382997e2be2f5c45a9d185c9da2c7831_prof);

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
