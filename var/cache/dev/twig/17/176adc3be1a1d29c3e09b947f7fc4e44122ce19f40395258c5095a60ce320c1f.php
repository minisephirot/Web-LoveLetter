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
        $__internal_1cfd676b31b1738a265e442f810fb84fe5a37cce201b606bad3124dfca98c1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cfd676b31b1738a265e442f810fb84fe5a37cce201b606bad3124dfca98c1e2->enter($__internal_1cfd676b31b1738a265e442f810fb84fe5a37cce201b606bad3124dfca98c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ff48cfd08a504044ebdc3c40080997bc4648d6436c8bf985cf7148fd04f8833c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff48cfd08a504044ebdc3c40080997bc4648d6436c8bf985cf7148fd04f8833c->enter($__internal_ff48cfd08a504044ebdc3c40080997bc4648d6436c8bf985cf7148fd04f8833c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1cfd676b31b1738a265e442f810fb84fe5a37cce201b606bad3124dfca98c1e2->leave($__internal_1cfd676b31b1738a265e442f810fb84fe5a37cce201b606bad3124dfca98c1e2_prof);

        
        $__internal_ff48cfd08a504044ebdc3c40080997bc4648d6436c8bf985cf7148fd04f8833c->leave($__internal_ff48cfd08a504044ebdc3c40080997bc4648d6436c8bf985cf7148fd04f8833c_prof);

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
