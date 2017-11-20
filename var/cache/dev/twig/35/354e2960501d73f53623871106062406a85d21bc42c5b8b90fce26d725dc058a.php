<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d0f0bbd89a157445d378809eb1a98f1bf7985e504a291af157b2a29c3c5abdfa extends Twig_Template
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
        $__internal_d1bf97fe89ff23164e61c3ad17d23de83306662f873ccfc2e4eb05d2e9da6832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bf97fe89ff23164e61c3ad17d23de83306662f873ccfc2e4eb05d2e9da6832->enter($__internal_d1bf97fe89ff23164e61c3ad17d23de83306662f873ccfc2e4eb05d2e9da6832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c2ec551a0273aa0613980df32de023debaf4315fdd2abf0053499e6b2f25913b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ec551a0273aa0613980df32de023debaf4315fdd2abf0053499e6b2f25913b->enter($__internal_c2ec551a0273aa0613980df32de023debaf4315fdd2abf0053499e6b2f25913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d1bf97fe89ff23164e61c3ad17d23de83306662f873ccfc2e4eb05d2e9da6832->leave($__internal_d1bf97fe89ff23164e61c3ad17d23de83306662f873ccfc2e4eb05d2e9da6832_prof);

        
        $__internal_c2ec551a0273aa0613980df32de023debaf4315fdd2abf0053499e6b2f25913b->leave($__internal_c2ec551a0273aa0613980df32de023debaf4315fdd2abf0053499e6b2f25913b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
