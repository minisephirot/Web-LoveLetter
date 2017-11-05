<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6641423b61dd5aa1670dbbded80679612ee67a6cb5a8836bde4fcb2e105c957b extends Twig_Template
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
        $__internal_6960eb635cf8101d280c3dacf70d2ea13a3748dbc2d8dbb29b3f15202259831c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6960eb635cf8101d280c3dacf70d2ea13a3748dbc2d8dbb29b3f15202259831c->enter($__internal_6960eb635cf8101d280c3dacf70d2ea13a3748dbc2d8dbb29b3f15202259831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3ec36dce51e908cc75adb745312105b3c79c11e2f88bb8db49911bd31d68d385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec36dce51e908cc75adb745312105b3c79c11e2f88bb8db49911bd31d68d385->enter($__internal_3ec36dce51e908cc75adb745312105b3c79c11e2f88bb8db49911bd31d68d385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6960eb635cf8101d280c3dacf70d2ea13a3748dbc2d8dbb29b3f15202259831c->leave($__internal_6960eb635cf8101d280c3dacf70d2ea13a3748dbc2d8dbb29b3f15202259831c_prof);

        
        $__internal_3ec36dce51e908cc75adb745312105b3c79c11e2f88bb8db49911bd31d68d385->leave($__internal_3ec36dce51e908cc75adb745312105b3c79c11e2f88bb8db49911bd31d68d385_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
