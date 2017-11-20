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
        $__internal_376de9bae6a620608d4b5048ea70225fb0b9231ef14ed62d3a6ef61a4ac44e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376de9bae6a620608d4b5048ea70225fb0b9231ef14ed62d3a6ef61a4ac44e62->enter($__internal_376de9bae6a620608d4b5048ea70225fb0b9231ef14ed62d3a6ef61a4ac44e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d83314b37c2481c45972e9c96e51b3abdf97e41da9fcb76675d06c6e9e56cb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83314b37c2481c45972e9c96e51b3abdf97e41da9fcb76675d06c6e9e56cb34->enter($__internal_d83314b37c2481c45972e9c96e51b3abdf97e41da9fcb76675d06c6e9e56cb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_376de9bae6a620608d4b5048ea70225fb0b9231ef14ed62d3a6ef61a4ac44e62->leave($__internal_376de9bae6a620608d4b5048ea70225fb0b9231ef14ed62d3a6ef61a4ac44e62_prof);

        
        $__internal_d83314b37c2481c45972e9c96e51b3abdf97e41da9fcb76675d06c6e9e56cb34->leave($__internal_d83314b37c2481c45972e9c96e51b3abdf97e41da9fcb76675d06c6e9e56cb34_prof);

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
