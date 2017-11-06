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
        $__internal_362e628f978fb2628d4337f1db8773525418d0438be406a4b12c36058f7c53b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362e628f978fb2628d4337f1db8773525418d0438be406a4b12c36058f7c53b7->enter($__internal_362e628f978fb2628d4337f1db8773525418d0438be406a4b12c36058f7c53b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ec3bdef74c5de082f721e572cc6c6b0a6616d316a1f31f7194ecac26189d05fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3bdef74c5de082f721e572cc6c6b0a6616d316a1f31f7194ecac26189d05fb->enter($__internal_ec3bdef74c5de082f721e572cc6c6b0a6616d316a1f31f7194ecac26189d05fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_362e628f978fb2628d4337f1db8773525418d0438be406a4b12c36058f7c53b7->leave($__internal_362e628f978fb2628d4337f1db8773525418d0438be406a4b12c36058f7c53b7_prof);

        
        $__internal_ec3bdef74c5de082f721e572cc6c6b0a6616d316a1f31f7194ecac26189d05fb->leave($__internal_ec3bdef74c5de082f721e572cc6c6b0a6616d316a1f31f7194ecac26189d05fb_prof);

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
