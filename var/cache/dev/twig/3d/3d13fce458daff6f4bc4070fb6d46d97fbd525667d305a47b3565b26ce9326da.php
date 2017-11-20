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
        $__internal_9c539512979d5f30e91536f87e04d325c7b548c1de00fbf0745ed7a58291d10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c539512979d5f30e91536f87e04d325c7b548c1de00fbf0745ed7a58291d10b->enter($__internal_9c539512979d5f30e91536f87e04d325c7b548c1de00fbf0745ed7a58291d10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_dd30c1bf3cf6965199b13eba3d573a10bf48f86bd30abe69ec4aa0f8ef28e1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd30c1bf3cf6965199b13eba3d573a10bf48f86bd30abe69ec4aa0f8ef28e1a0->enter($__internal_dd30c1bf3cf6965199b13eba3d573a10bf48f86bd30abe69ec4aa0f8ef28e1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9c539512979d5f30e91536f87e04d325c7b548c1de00fbf0745ed7a58291d10b->leave($__internal_9c539512979d5f30e91536f87e04d325c7b548c1de00fbf0745ed7a58291d10b_prof);

        
        $__internal_dd30c1bf3cf6965199b13eba3d573a10bf48f86bd30abe69ec4aa0f8ef28e1a0->leave($__internal_dd30c1bf3cf6965199b13eba3d573a10bf48f86bd30abe69ec4aa0f8ef28e1a0_prof);

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
