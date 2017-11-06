<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_cfcfedda73c61dcf531f38ff1cf260af447e003ab7e4f8f4f5cb58cc9c06a18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcfedda73c61dcf531f38ff1cf260af447e003ab7e4f8f4f5cb58cc9c06a18a->enter($__internal_cfcfedda73c61dcf531f38ff1cf260af447e003ab7e4f8f4f5cb58cc9c06a18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_10efcc220f0dfea3bb5fed291e463fb0fd57a5b49f220cbd5671baba6560fa59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10efcc220f0dfea3bb5fed291e463fb0fd57a5b49f220cbd5671baba6560fa59->enter($__internal_10efcc220f0dfea3bb5fed291e463fb0fd57a5b49f220cbd5671baba6560fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cfcfedda73c61dcf531f38ff1cf260af447e003ab7e4f8f4f5cb58cc9c06a18a->leave($__internal_cfcfedda73c61dcf531f38ff1cf260af447e003ab7e4f8f4f5cb58cc9c06a18a_prof);

        
        $__internal_10efcc220f0dfea3bb5fed291e463fb0fd57a5b49f220cbd5671baba6560fa59->leave($__internal_10efcc220f0dfea3bb5fed291e463fb0fd57a5b49f220cbd5671baba6560fa59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
