<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_4af481b7f6f8cbe27074287c0d20e559d317001d5803224686e17e93367a398b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af481b7f6f8cbe27074287c0d20e559d317001d5803224686e17e93367a398b->enter($__internal_4af481b7f6f8cbe27074287c0d20e559d317001d5803224686e17e93367a398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_063ebc9d03edf705fb78e59365d44924b883295fe1b5fda27f21a55e880f81ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063ebc9d03edf705fb78e59365d44924b883295fe1b5fda27f21a55e880f81ef->enter($__internal_063ebc9d03edf705fb78e59365d44924b883295fe1b5fda27f21a55e880f81ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4af481b7f6f8cbe27074287c0d20e559d317001d5803224686e17e93367a398b->leave($__internal_4af481b7f6f8cbe27074287c0d20e559d317001d5803224686e17e93367a398b_prof);

        
        $__internal_063ebc9d03edf705fb78e59365d44924b883295fe1b5fda27f21a55e880f81ef->leave($__internal_063ebc9d03edf705fb78e59365d44924b883295fe1b5fda27f21a55e880f81ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
