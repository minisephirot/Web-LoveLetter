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
        $__internal_f152726d2a5bfcfabdcf295a918182a58ae4ab11ce929e9c1f0c777f92da877b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f152726d2a5bfcfabdcf295a918182a58ae4ab11ce929e9c1f0c777f92da877b->enter($__internal_f152726d2a5bfcfabdcf295a918182a58ae4ab11ce929e9c1f0c777f92da877b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ee26e45e3febd22f87faab6ba9f8af8efe3ab9ab351aa921942a36e83c630218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee26e45e3febd22f87faab6ba9f8af8efe3ab9ab351aa921942a36e83c630218->enter($__internal_ee26e45e3febd22f87faab6ba9f8af8efe3ab9ab351aa921942a36e83c630218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_f152726d2a5bfcfabdcf295a918182a58ae4ab11ce929e9c1f0c777f92da877b->leave($__internal_f152726d2a5bfcfabdcf295a918182a58ae4ab11ce929e9c1f0c777f92da877b_prof);

        
        $__internal_ee26e45e3febd22f87faab6ba9f8af8efe3ab9ab351aa921942a36e83c630218->leave($__internal_ee26e45e3febd22f87faab6ba9f8af8efe3ab9ab351aa921942a36e83c630218_prof);

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
