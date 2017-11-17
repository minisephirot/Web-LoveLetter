<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_d22741aec2c445e1bf6434e5b46e910cf898b0d24383dcc32f30b779884cf044 extends Twig_Template
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
        $__internal_6eadd077e152048a7286308a54d66cf91f3917e96b12adf4d7dcbfd80b483790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eadd077e152048a7286308a54d66cf91f3917e96b12adf4d7dcbfd80b483790->enter($__internal_6eadd077e152048a7286308a54d66cf91f3917e96b12adf4d7dcbfd80b483790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_189b8ad9af9d64b6593b8c4a2026cf1c451f14f5eb03cac1f53fb733316eb8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189b8ad9af9d64b6593b8c4a2026cf1c451f14f5eb03cac1f53fb733316eb8c8->enter($__internal_189b8ad9af9d64b6593b8c4a2026cf1c451f14f5eb03cac1f53fb733316eb8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_6eadd077e152048a7286308a54d66cf91f3917e96b12adf4d7dcbfd80b483790->leave($__internal_6eadd077e152048a7286308a54d66cf91f3917e96b12adf4d7dcbfd80b483790_prof);

        
        $__internal_189b8ad9af9d64b6593b8c4a2026cf1c451f14f5eb03cac1f53fb733316eb8c8->leave($__internal_189b8ad9af9d64b6593b8c4a2026cf1c451f14f5eb03cac1f53fb733316eb8c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
