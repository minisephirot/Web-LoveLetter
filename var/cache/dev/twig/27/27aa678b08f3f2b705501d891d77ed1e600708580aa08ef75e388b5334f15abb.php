<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
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
        $__internal_a1cf617a6c50aa0e884eb8100168331e7741a4f0ecdd2221c626c6582f00a1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cf617a6c50aa0e884eb8100168331e7741a4f0ecdd2221c626c6582f00a1b1->enter($__internal_a1cf617a6c50aa0e884eb8100168331e7741a4f0ecdd2221c626c6582f00a1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_94b853e7243fa536d32e1582f5658d27910ac03ec83496ab88abdb33f37cb257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b853e7243fa536d32e1582f5658d27910ac03ec83496ab88abdb33f37cb257->enter($__internal_94b853e7243fa536d32e1582f5658d27910ac03ec83496ab88abdb33f37cb257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a1cf617a6c50aa0e884eb8100168331e7741a4f0ecdd2221c626c6582f00a1b1->leave($__internal_a1cf617a6c50aa0e884eb8100168331e7741a4f0ecdd2221c626c6582f00a1b1_prof);

        
        $__internal_94b853e7243fa536d32e1582f5658d27910ac03ec83496ab88abdb33f37cb257->leave($__internal_94b853e7243fa536d32e1582f5658d27910ac03ec83496ab88abdb33f37cb257_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
