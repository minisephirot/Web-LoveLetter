<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_433cb35566819d362d9e9aa58945b2def44e6afa16cef0335990934740121fe5 extends Twig_Template
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
        $__internal_0f6c7f415f3e20f7b6a8ef95b48426c2b66a58e5b4adc7b756878c86d0725611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6c7f415f3e20f7b6a8ef95b48426c2b66a58e5b4adc7b756878c86d0725611->enter($__internal_0f6c7f415f3e20f7b6a8ef95b48426c2b66a58e5b4adc7b756878c86d0725611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_3470f9ea4c43330e998ecb759d2a8b6b3bc658976b7188de5ba4a4d6bef49835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3470f9ea4c43330e998ecb759d2a8b6b3bc658976b7188de5ba4a4d6bef49835->enter($__internal_3470f9ea4c43330e998ecb759d2a8b6b3bc658976b7188de5ba4a4d6bef49835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_0f6c7f415f3e20f7b6a8ef95b48426c2b66a58e5b4adc7b756878c86d0725611->leave($__internal_0f6c7f415f3e20f7b6a8ef95b48426c2b66a58e5b4adc7b756878c86d0725611_prof);

        
        $__internal_3470f9ea4c43330e998ecb759d2a8b6b3bc658976b7188de5ba4a4d6bef49835->leave($__internal_3470f9ea4c43330e998ecb759d2a8b6b3bc658976b7188de5ba4a4d6bef49835_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
