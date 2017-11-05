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
        $__internal_ef9d81c2db1ad54a5c038f688b54d5dbd8263533fb6d850aef68ed67fb7e31a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9d81c2db1ad54a5c038f688b54d5dbd8263533fb6d850aef68ed67fb7e31a0->enter($__internal_ef9d81c2db1ad54a5c038f688b54d5dbd8263533fb6d850aef68ed67fb7e31a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a874fed6a551d7048bcd3aa3697489a68bd644dbe58a373b2594a81bcd0adfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a874fed6a551d7048bcd3aa3697489a68bd644dbe58a373b2594a81bcd0adfa9->enter($__internal_a874fed6a551d7048bcd3aa3697489a68bd644dbe58a373b2594a81bcd0adfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ef9d81c2db1ad54a5c038f688b54d5dbd8263533fb6d850aef68ed67fb7e31a0->leave($__internal_ef9d81c2db1ad54a5c038f688b54d5dbd8263533fb6d850aef68ed67fb7e31a0_prof);

        
        $__internal_a874fed6a551d7048bcd3aa3697489a68bd644dbe58a373b2594a81bcd0adfa9->leave($__internal_a874fed6a551d7048bcd3aa3697489a68bd644dbe58a373b2594a81bcd0adfa9_prof);

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
