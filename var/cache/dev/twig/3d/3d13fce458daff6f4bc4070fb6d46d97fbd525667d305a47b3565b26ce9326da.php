<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
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
        $__internal_9a42f8028e9c61f9d0960ae0100e5a510fda3837f2321a96738c3b837492be35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a42f8028e9c61f9d0960ae0100e5a510fda3837f2321a96738c3b837492be35->enter($__internal_9a42f8028e9c61f9d0960ae0100e5a510fda3837f2321a96738c3b837492be35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6652adaa95edcc1f15767ff7fe100187f13cb88431a37699e3b8ae7bae05296d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6652adaa95edcc1f15767ff7fe100187f13cb88431a37699e3b8ae7bae05296d->enter($__internal_6652adaa95edcc1f15767ff7fe100187f13cb88431a37699e3b8ae7bae05296d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9a42f8028e9c61f9d0960ae0100e5a510fda3837f2321a96738c3b837492be35->leave($__internal_9a42f8028e9c61f9d0960ae0100e5a510fda3837f2321a96738c3b837492be35_prof);

        
        $__internal_6652adaa95edcc1f15767ff7fe100187f13cb88431a37699e3b8ae7bae05296d->leave($__internal_6652adaa95edcc1f15767ff7fe100187f13cb88431a37699e3b8ae7bae05296d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
