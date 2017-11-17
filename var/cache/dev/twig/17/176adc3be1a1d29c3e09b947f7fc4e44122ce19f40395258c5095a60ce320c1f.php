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
        $__internal_6ad649f5b2d146b47fa609edd174f538071825112f6863f0448303b9a97554f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad649f5b2d146b47fa609edd174f538071825112f6863f0448303b9a97554f2->enter($__internal_6ad649f5b2d146b47fa609edd174f538071825112f6863f0448303b9a97554f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d8575512d80c174a833fb92d1c103e7eb5b5196fe66cc74b243033c269075287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8575512d80c174a833fb92d1c103e7eb5b5196fe66cc74b243033c269075287->enter($__internal_d8575512d80c174a833fb92d1c103e7eb5b5196fe66cc74b243033c269075287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6ad649f5b2d146b47fa609edd174f538071825112f6863f0448303b9a97554f2->leave($__internal_6ad649f5b2d146b47fa609edd174f538071825112f6863f0448303b9a97554f2_prof);

        
        $__internal_d8575512d80c174a833fb92d1c103e7eb5b5196fe66cc74b243033c269075287->leave($__internal_d8575512d80c174a833fb92d1c103e7eb5b5196fe66cc74b243033c269075287_prof);

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
